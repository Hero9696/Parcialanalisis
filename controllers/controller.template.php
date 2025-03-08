<?php

class TemplateController {

    // Main view template
    public function index() {
        include __DIR__ . '/../views/template.php';
    }

    // Main route URL
    static public function path() {
        $protocol = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https" : "http";
        return $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
    }
}
