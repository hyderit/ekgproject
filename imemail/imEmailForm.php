<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Full Name', $_POST['imObjectForm_1_1'], '', false);
	$form->setField('Your Email', $_POST['imObjectForm_1_2'], '', false);
	$form->setField('How can we help you?', $_POST['imObjectForm_1_3'], '', false);
	$form->setField('Your Message', $_POST['imObjectForm_1_4'], '', false);
	$fileResult = $form->setFile('Attachments', $_FILES['imObjectForm_1_5'], $imSettings['general']['public_folder'], '', '');
	if ($fileResult == -1) { die(imPrintError('Cannot send file: Attachments')); }
	if ($fileResult < -1) { die(imPrintError('"Attachments" is in the wrong format.')); }

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('hyder4hamandi@gmail.com', 'hyder4hamandi@gmail.com', 'EKG Website', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file