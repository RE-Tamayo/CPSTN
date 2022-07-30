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

    public function approve($id) {
        $data = $this->getReg($id);
        $email = $data['email'];
        $fName = $data['fName'];
        $lName = $data['lName'];
        $username = $data['uname'];
        $sendMail = new SendMail();
        $sendMail->sendApprovalEmail($email, $fName, $lName, $username);
        $this->approveRegistration($id);
    }

    public function delete($id) {
        $this->delete($id);
    }

}
