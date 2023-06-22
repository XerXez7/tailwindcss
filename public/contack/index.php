<html>
<head>
<title>Contact Us Form</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://phppot.com/php/responsive-contact-form-using-tailwind-css/node/tailwindcss/dist/tailwind.css" rel="stylesheet">
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
</head>
<body>

	<div
		class="w-full mx-auto max-w-3xl bg-white px-4 pt-1 pb-6 text-gray-700">
		<div class="block w-full text-grey-darkest mb-5 text-3xl">PHP contact
			form with tailwind css</div>
		<form name="frmContact"
			class="mb-4 px-5 py-5 border border-gray-200 md:justify-between rounded"
			frmContact"" method="post" action="" enctype="multipart/form-data"
			onsubmit="return validateContactForm()">

			<div>
				<div class="label flex flex-col">
					<label class="text-grey-darkest md:ml-2" for="last_name"> Name <span
						id="userName-info" class=""></span>
					</label>
				</div>
				<input type="text"
					class="border border-gray-400 rounded mb-5 py-1 px-3 text-grey-darkest md:ml-2"
					name="userName" id="userName"
					value="<?php if(!empty($_POST['userName'])&& $type == 'error'){ echo $_POST['userName'];}?>" />
			</div>
			<div>
				<div class="label flex flex-col">
					<label class="text-base text-grey-darkest md:ml-2" for="last_name">
						Email <span id="userEmail-info" class="validation-message"></span>
					</label>
				</div>
				<input type="text"
					class="border border-gray-400 rounded mb-5 py-1 px-3 text-grey-darkest md:ml-2"
					name="userEmail" id="userEmail"
					value="<?php if(!empty($_POST['userEmail'])&& $type == 'error'){ echo $_POST['userEmail'];}?>" />
			</div>
			<div>
				<div class="label flex flex-col">
					<label class="text-base text-grey-darkest md:ml-2" for="last_name">
						Subject <span id="subject-info" class="validation-message"></span>
					</label>
				</div>
				<input type="text"
					class="border rounded border-gray-400 mb-5 py-1 px-3 text-grey-darkest md:ml-2"
					name="subject" id="subject"
					value="<?php if(!empty($_POST['subject'])&& $type == 'error'){ echo $_POST['subject'];}?>" />
			</div>
			<div>
				<div class="label flex flex-col">
					<label class="text-base text-grey-darkest md:ml-2" for="last_name">
						Message <span id="userMessage-info" class="validation-message"></span>
					</label>
				</div>
				<textarea name="content" id="content"
					class="resize-x border border-gray-400 rounded md:ml-2  mb-4"
					cols="35" rows="5"><?php if(!empty($_POST['content'])&& $type == 'error'){ echo $_POST['content'];}?></textarea>
			</div>

			<div>
				<input type="submit" name="send"
					class="bg-green-400 rounded text-white font-bold py-1 px-16 md:ml-2"
					value="Send" />
			</div>

		</form>
		<?php if(!empty($message)) { ?>
		<div id="phppot-message" class="<?php  echo $type; ?>"><?php if(isset($message)){ ?>
				    <?php echo $message; }}?>

                    </div>
	</div>
	<script src="assets/js/script.js"></script>
</body>
</html>