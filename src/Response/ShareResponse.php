<?php
/**
 * Created by PhpStorm.
 * User: krona
 * Date: 5/28/14
 * Time: 3:22 PM
 */
namespace Arilas\ScreenLeap\Response;

class ShareResponse
{
    protected $response;

    public function __construct(array $response)
    {
        $this->response = $response;
    }

    public function getViewerUrl()
    {
        return $this->response['viewerUrl'];
    }

    public function getPresenterParams()
    {
        return $this->response['presenterParams'];
    }

    public function getOrigin()
    {
        return $this->response['origin'];
    }

    public function getScreenShareCode()
    {
        return $this->response['screenShareCode'];
    }

    public function getAppletHtml()
    {
        return $this->response['appletHtml'];
    }

    public function getBrowserMessageUrl()
    {
        return $this->response['browserMessageUrl'];
    }

    public function getRectangleColor()
    {
        return $this->response['rectangleColor'];
    }
} 