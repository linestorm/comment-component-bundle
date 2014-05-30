<?php

namespace LineStorm\CommentComponentBundle\Module;

use LineStorm\CmsBundle\Module\AbstractModule;
use LineStorm\CmsBundle\Module\ModuleInterface;
use Symfony\Component\Config\Loader\Loader;

/**
 *
 *
 * Class CommentModule
 *
 * @package LineStorm\CommentComponentBundle\Module
 */
class CommentModule extends AbstractModule implements ModuleInterface
{
    protected $name = 'Comment';
    protected $id = 'comment';

    /**
     * Returns the navigation array
     *
     * @return array
     */
    public function getNavigation()
    {
        return array();
    }

    /**
     * The route to load as 'home'
     *
     * @return string
     */
    public function getHome()
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function addRoutes(Loader $loader)
    {
        return $loader->import('@LineStormCommentBundle/Resources/config/routing.yml', 'rest');
    }

    /**
     * @inheritdoc
     */
    public function addAdminRoutes(Loader $loader)
    {
    }
}
