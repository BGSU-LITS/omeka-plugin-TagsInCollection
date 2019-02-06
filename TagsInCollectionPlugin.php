<?php
/**
 * Omeka Tags In Collection Plugin
 *
 * @author John Kloor <kloor@bgsu.edu>
 * @copyright 2018 Bowling Green State University Libraries
 * @license MIT
 */

/**
 * Omeka Tags In Collection Plugin: Plugin Class
 *
 * @package TagsInCollection
 */
class TagsInCollectionPlugin extends Omeka_Plugin_AbstractPlugin
{
    /**
     * @var array Plugin hooks.
     */
    protected $_hooks = array('tags_browse_sql');

    public function hookTagsBrowseSql($args)
    {
        if ($args['params']['collection']) {
            $args['select']->where('items.collection_id = ?', $args['params']['collection']);
        }
    }
}
