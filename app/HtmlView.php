<?php

class HtmlView
{
    public function render($response)
    {
        echo $this->getRenderedHTML(sprintf('%s/%s/%s.php', __DIR__, '../src/Resource/view', $response['template']), $response['data']);
    }

    private function getRenderedHTML($path, $data)
    {
        ob_start();
        include($path);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}
