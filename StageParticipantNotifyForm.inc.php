<?php

import('lib.pkp.classes.form.Form');

class StageParticipantNotifyForm extends Form {

    /** @var int */
    var $_submissionId;

    /** @var int */
    var $_stageId;

    /** @var int */
    var $_userGroupId;

    function __construct($submissionId, $stageId, $userGroupId) {
        parent::__construct('controllers/grid/users/stageParticipant/form/notifyForm.tpl');

        $this->_submissionId = $submissionId;
        $this->_stageId = $stageId;
        $this->_userGroupId = $userGroupId;

        // validasi form
        $this->addCheck(new FormValidator($this, 'subject', 'required', 'form.subjectRequired'));
        $this->addCheck(new FormValidator($this, 'message', 'required', 'form.messageRequired'));
    }

    function initData() {
        // isi default
        $this->setData('subject', '');
        $this->setData('message', '');
    }

    function readInputData() {
        // ambil input user
        $this->readUserVars(array(
            'subject',
            'message',
            'recipients'
        ));
    }

    function execute() {
        parent::execute();

        $subject = $this->getData('subject');
        $message = $this->getData('message');
        $recipients = $this->getData('recipients');

        if (!empty($recipients)) {
            foreach ($recipients as $recipient) {
                // kirim email ke participant
                mail($recipient['email'], $subject, $message);
            }
        }
    }
}
