<?php
/**
 * PESCMS for PHP 5.4+
 *
 * Copyright (c) 2014 PESCMS (http://www.pescms.com)
 *
 * For the full copyright and license information, please view
 * the file LICENSE.md that was distributed with this source code.
 * @core version 2.6
 * @version 1.0
 */


namespace Slice\Doc;

/**
 * 文档树切片
 */
class Tree extends \Core\Slice\Slice{

    public function before() {
        $treeList = $this->db('tree')->order('tree_parent,tree_listsort ASC, tree_id DESC')->select();
        $tmpArray = array();
        foreach($treeList as $value){
            $tmpArray[$value['tree_id']] = $value;
        }
        $this->assign('treeList', $tmpArray);
    }

    public function after() {
    }

}