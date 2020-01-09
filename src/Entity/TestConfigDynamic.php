<?php

namespace Acquia\LiftClient\Entity;

class TestConfigDynamic extends TestConfigBase implements TestConfigInterface
{
    /**
     * Sets the 'slot_id' parameter.
     *
     * @param string $slotId 
     *
     * @throws \Acquia\LiftClient\Exception\LiftSdkException
     *
     * @return \Acquia\LiftClient\Entity\TestConfigDynamic
     */
    public function setSlotId($slotId)
    {
        if (!is_string($slotId)) {
            throw new LiftSdkException('Argument must be an instance of string.');
        }
        $this['slot_id'] = $slot_id;

        return $this;
    }

    /**
     * Gets the 'slot_id' parameter.
     *
     * @return string The Slot Id that the target rule is associated with
     */
    public function geSlotId()
    {
        return $this->getEntityValue('slot_id', '');
    }

    /**
     * Sets the 'filter_id' parameter.
     *
     * @param string $filterId 
     *
     * @throws \Acquia\LiftClient\Exception\LiftSdkException
     *
     * @return \Acquia\LiftClient\Entity\TestConfigDynamic
     */
    public function setFilterId($filterId)
    {
        if (!is_string($filterId)) {
            throw new LiftSdkException('Argument must be an instance of string.');
        }
        $this['filter_id'] = $filterId;

        return $this;
    }

    /**
     * Gets the 'filterId' parameter.
     *
     * @return string The Filter Id associated with dynamic rule
     */
    public function getFilterId()
    {
        return $this->getEntityValue('filter_id', '');
    }

    /**
     * Sets the 'algorithm' parameter.
     *
     * @param string $algorithm 
     *
     * @throws \Acquia\LiftClient\Exception\LiftSdkException
     *
     * @return \Acquia\LiftClient\Entity\TestConfigDynamic
     */
    public function setAlgorithm($algorithm)
    {
        if (!is_string($algorithm)) {
            throw new LiftSdkException('Argument must be an instance of string.');
        }
        $this['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets the 'algorithm' parameter.
     *
     * @return string Algorithm 
     */
    public function getAlgorithm()
    {
        return $this->getEntityValue('algorithm', '');
    }

    /**
     * Sets the 'view_mode_id' parameter.
     *
     * @param string $viewModeId 
     *
     * @throws \Acquia\LiftClient\Exception\LiftSdkException
     *
     * @return \Acquia\LiftClient\Entity\TestConfigDynamic
     */
    public function setViewModeId($viewModeId)
    {
        if (!is_string($viewModeId)) {
            throw new LiftSdkException('Argument must be an instance of string.');
        }
        $this['view_mode_id'] = $viewModeId;

        return $this;
    }

    /**
     * Gets the 'view_mode_id' parameter.
     *
     * @return string Algorithm 
     */
    public function getViewModeId()
    {
        return $this->getEntityValue('view_mode_id', '');
    }

    /**
     * Sets the 'count' parameter.
     *
     * @param int $count 
     *
     * @throws \Acquia\LiftClient\Exception\LiftSdkException
     *
     * @return \Acquia\LiftClient\Entity\TestConfigDynamic
     */
    public function setCount($count)
    {
        if (!is_int($count) && $count >= 0) {
            throw new LiftSdkException('Argument must be an instance of integer.');
        }
        $this['count'] = $viewModeId;

        return $this;
    }

    /**
     * Gets the 'count' parameter.
     *
     * @return int count 
     */
    public function getCount()
    {
        return $this->getEntityValue('count', '');
    }

    /**
     * Sets the 'exclude_viewed_content' parameter.
     *
     * @param bool $excludeViewedContent Flag to indicate to exclude viewed content. Only return results with 'view' value of 0
     *
     * @throws \Acquia\LiftClient\Exception\LiftSdkException
     *
     * @return \Acquia\LiftClient\Entity\Decide
     */
    public function setExcludeViewedContent($excludeViewedContent)
    {
        if (!is_bool($excludeViewedContent)) {
            throw new LiftSdkException('Argument must be an instance of boolean.');
        }
        $this['exclude_viewed_content'] = $excludeViewedContent;

        return $this;
    }

    /**
     * Gets the 'exclude_viewed_content' parameter.
     *
     * @return boolean  
     */
    public function getExcludeViewedContent()
    {
        return $this->getEntityValue('exclude_viewed_content', '');
    }

    /**
     * Sets the 'content' parameter.
     *
     * @param Content[] $contentList
     *
     * @throws \Acquia\LiftClient\Exception\LiftSdkException
     *
     * @return \Acquia\LiftClient\Entity\TestConfigDynamic
     */
    public function setContentList(array $contentList)
    {
        $this['content'] = [];
        foreach ($contentList as $content) {
            // We need to 'normalize' the data.
            $this['content'][] = $content->getArrayCopy();
        }

        return $this;
    }

    /**
     * Gets the 'content' parameter.
     *
     * @return Content[] The list of content this rule applies to
     */
    public function getContentList()
    {
        $contentList = $this->getEntityValue('content', '');
        $ret = [];
        foreach ($contentList as $content) {
            $ret[] = new Content($content);
        }

        return $ret;
    }

}
