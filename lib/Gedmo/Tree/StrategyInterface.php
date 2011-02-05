<?php

namespace Gedmo\Tree;

interface StrategyInterface
{
    /**
     * Get the name of strategy
     * 
     * @return string
     */
    function getName();
    
    /**
     * Builds an adapter
     * 
     * @param AbstractTreeListener $listener
     * @return void
     */
    function __construct(AbstractTreeListener $listener);
    
    /**
     * Operations on tree node updates
     * 
     * @param object $om - object manager
     * @param object $object - node
     * @return void
     */
    function processScheduledUpdate($om, $object);
    
    /**
     * Operations on tree node deletions
     * 
     * @param object $om - object manager
     * @param object $object - node
     * @return void
     */
    function processScheduledDelete($om, $object);
    
    /**
     * Operations on tree node persist
     * 
     * @param object $om - object manager
     * @param object $object - node
     * @return void
     */
    function processPrePersist($om, $object);
    
    /**
     * Operations on tree node insertions
     * 
     * @param object $om - object manager
     * @param object $object - node
     * @return void
     */
    function processPostPersist($om, $object);
    
    /**
     * Operations on the end of flush process
     * 
     * @param object $om - object manager
     * @return void
     */
    function onFlushEnd($om);
    
    /**
     * Operations on tree pending insertions
     * 
     * @param object $om - object manager
     * @return void
     */
    function processPendingInserts($om);
}