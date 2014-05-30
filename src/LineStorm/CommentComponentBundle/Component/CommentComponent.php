<?php

namespace LineStorm\CommentComponentBundle\Component;

use Andy\PortfolioBundle\Entity\Article;
use LineStorm\CommentBundle\Model\Comment;
use LineStorm\Content\Component\AbstractBodyComponent;
use LineStorm\Content\Component\AbstractFooterComponent;
use LineStorm\Content\Component\ComponentInterface;
use LineStorm\Content\Component\View\ComponentView;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Comment Component Class
 *
 * Class CommentComponent
 *
 * @package LineStorm\CommentComponentBundle\Component
 */
class CommentComponent extends AbstractFooterComponent implements ComponentInterface
{
    /**
     * Fetch the component id string
     *
     * @return string
     */
    public function getId()
    {
        return 'comments';
    }

    /**
     * Fetch the component name
     *
     * @return mixed
     */
    public function getName()
    {
        return  'Comment';
    }

    /**
     * @inheritdoc
     */
    public function isSupported($entity)
    {
        return ($entity instanceof Comment);
    }

    /**
     * @inheritdoc
     */
    public function getAssets()
    {
        return array(
            '@LineStormCommentBundle/Resources/public/js/comment.js'
        );
    }

    /**
     * @inheritdoc
     */
    public function getView($entity)
    {
        return new ComponentView('LineStormCommentComponentBundle::view.html.twig', array(
            '@LineStormCommentBundle/Resources/public/js/comment.js'
        ));
    }

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentsEnabled', 'checkbox', array(
                'required' => false,
            ))
            ->add('commentsAnonymous', 'checkbox', array(
                'required' => false,
            ))
        ;
    }

    /**
     * @return array
     */
    public function getFormFields()
    {
        return array(
            'commentsEnabled',
            'commentsAnonymous'
        );
    }
} 
