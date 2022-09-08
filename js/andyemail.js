function sendEmail()
	{
		Email.send({
			Host : "smtp.gmail.com",
			Username : "blck.clvr@gmail.com",
			Password : "blckclvr!#$123",
			To : 'blck.clvr@gmail.com',
			From : document.getElementById("email").value,
			Subject : document.getElementById("name").value,
			Body : document.getElementById("message").value
		}).then(
		  message => alert(message)
		);
	}
