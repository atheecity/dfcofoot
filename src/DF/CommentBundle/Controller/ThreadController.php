<?php 

namespace DF\CommentBundle\Controller;

use FOS\CommentBundle\Controller\ThreadController as Controller;
use FOS\CommentBundle\Model\ThreadInterface;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;

class ThreadController extends Controller 
{
	
	/**
	 * @Secure(roles="ROLE_USER")
	 */
	public function postThreadCommentsAction(Request $request, $id)
	{
		$thread = $this->container->get('fos_comment.manager.thread')->findThreadById($id);
		if (!$thread) {
			throw new NotFoundHttpException(sprintf('Thread with identifier of "%s" does not exist', $id));
		}
	
		$parent = $this->getValidCommentParent($thread, $request->query->get('parentId'));
		$commentManager = $this->container->get('fos_comment.manager.comment');
		$comment = $commentManager->createComment($thread, $parent);
	
		$form = $this->container->get('fos_comment.form_factory.comment')->createForm();
		$form->setData($comment);
		$form->bind($request);
	
		if ($form->isValid()) {
			$commentManager->saveComment($comment);
			
			$cache = $this->get('tagcache');
			$cache->deleteTag('commentaires_'.$thread->getId());
	
			return $this->getViewHandler()->handle($this->onCreateCommentSuccess($form, $id, $parent));
		}
	
		return $this->getViewHandler()->handle($this->onCreateCommentError($form, $id, $parent));
	}
	
	private function getValidCommentParent(ThreadInterface $thread, $commentId)
	{
		if (null !== $commentId) {
			$comment = $this->container->get('fos_comment.manager.comment')->findCommentById($commentId);
			if (!$comment) {
				throw new NotFoundHttpException(sprintf('Parent comment with identifier "%s" does not exist', $commentId));
			}
	
			if ($comment->getThread() !== $thread) {
				throw new NotFoundHttpException('Parent comment is not a comment of the given thread.');
			}
	
			return $comment;
		}
	}
	
	private function getViewHandler()
	{
		return $this->container->get('fos_rest.view_handler');
	}
}