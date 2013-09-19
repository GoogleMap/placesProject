<?php

namespace Bundle\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bundle\ProjectBundle\Entity\Comment;
use Bundle\ProjectBundle\Form\CommentType;

class CommentController extends Controller{

    public function newAction($place_id) {
//        var_dump($place_id);
//        exit();
        $place = $this->getPlace($place_id);

        $comment = new Comment();
        $comment->setPlace($place);
        $form = $this->createForm(new CommentType(), $comment);

        return $this->render('BundleProjectBundle:Comment:form.html.twig', array(
                    'comment' => $comment,
                    'form' => $form->createView()
        ));
    }

    // Create comment and redirect
    public function createAction($place_id) {
        $em = $this->getDoctrine();
        $place = $this->getPlace($place_id);

        $comment = new Comment();
        $comment->setPlace($place);
        $request = $this->getRequest();
        $form = $this->createForm(new CommentType(), $comment);
        $form->bind($request);

        if ($form->isValid()) {
            // TODO: Persist the comment entity
            $em = $this->getDoctrine()
                    ->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirect($this->generateUrl('BundleProjectBundle_places_showPlace', array(
                                'id' => $comment->getPlace()->getId())) .
                            '#comment-' . $comment->getId()
            );
        }

        return $this->render('BundleProjectBundle:Comment:create.html.twig', array(
                    'comment' => $comment,
                    'form' => $form->createView()
        ));
    }

    // getStore
    protected function getPlace($place_id) {
        $em = $this->getDoctrine()
                ->getEntityManager();

        $place = $em->getRepository('BundleProjectBundle:Places')->find($place_id);

        if (!$place) {
            throw $this->createNotFoundException('Unable to find place post.');
        }

        return $place;
    }
}

?>
