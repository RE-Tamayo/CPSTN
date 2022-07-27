<?php


class AdminApproveContr extends AdminModel {

    public function __construct() {
        return true;
    }

    public function getAllReg() {
        $data = $this->getAllRegistration();
        return $data;
    }

    public function getReg($id) {
        $data = $this->getRegistration($id);
        return $data;
    }

}
