<?php

class CurlManager
{
    protected $url;
    protected $curl;

    public function __construct($url)
    {
        $this->url = $url;
        $this->curl = curl_init($this->url);
    }

    public function setOption($option, $value)
    {
        curl_setopt($this->curl, $option, $value);
    }

    public function execute()
    {
        return curl_exec($this->curl);
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }
}

?>
