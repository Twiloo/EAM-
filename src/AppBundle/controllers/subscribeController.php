<?php

namespace AppBundle\controllers;

use AppBundle\Controllers\DefaultController as Controller;

class SubscribeController extends Controller {

    public function subscribeAction() {
        $this->render('Subscribe');
    }

    public function subscribePostAction() {

    }

    public function unsubscribeAction() {
        $this->render('Unsubscribe');
    }

    public function unsubscribePostAction() {

    }
}