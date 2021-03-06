<?php

namespace MovingImage\Client\VMPro\Entity;

use MovingImage\VMProApiClient\Util\AccessorTrait;

/**
 * Class VideosRequestParameters.
 *
 * @method int getChannelId()
 * @method VideosRequestParameters setChannelId(int $channelId)
 * @method int getOffset()
 * @method VideosRequestParameters setOffset(int $offset)
 * @method int getLimit()
 * @method VideosRequestParameters setLimit(int $limit)
 * @method string getOrder()
 * @method string getOrderProperty()
 * @method VideosRequestParameters setOrderProperty(int $orderProperty)
 * @method string getSearchTerm()
 * @method VideosRequestParameters setSearchTerm(int $searchTerm)
 * @method bool isIncludeCustomMetadata()
 * @method string getCustomMetadataField()
 * @method VideosRequestParameters setCustomMetadataField(int $customMetadataField)
 * @method string getSearchInField()
 * @method VideosRequestParameters setSearchInField(int $searchInField)
 * @method string getPublicationState()
 * @method VideosRequestParameters setPublicationState(int $publicationState)
 * @method bool isIncludeKeywords()
 *
 * @author Omid Rad <omid.rad@movingimage.com>
 */
class VideosRequestParameters
{
    use AccessorTrait;

    /**
     * @param string $order
     *
     * @return VideosRequestParameters
     */
    public function setOrder($order)
    {
        $pool = ['asc', 'desc'];

        // Silently ignore wrong values
        if (in_array($order, $pool)) {
            $this->container['order'] = $order;
        }

        return $this;
    }

    /**
     * @param bool $includeCustomMetadata
     *
     * @return VideosRequestParameters
     */
    public function setIncludeCustomMetadata($includeCustomMetadata)
    {
        $this->container['include_custom_metadata'] = boolval($includeCustomMetadata);

        return $this;
    }

    /**
     * @param bool $includeKeywords
     *
     * @return VideosRequestParameters
     */
    public function setIncludeKeywords($includeKeywords)
    {
        $this->container['include_keywords'] = boolval($includeKeywords);

        return $this;
    }
}
