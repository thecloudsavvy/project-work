const emailInput = document.querySelector("input[type='email']");
const emailInfo = document.querySelector("#email_info");



emailInput.addEventListener("blur", function(){

		const xhr = new XMLHttpRequest();

		xhr.open("GET", "loaders/users.json");


		xhr.onreadystatechange = function(){

			if(this.readyState == 4 && this.status == 200){

				users = JSON.parse(this.response);

				for(i in users){
					
				}


			}
		}



		xhr.send();



	//emailInfo.innerHTML = "<span style='color: red;'>  ✘ Email not used</span>";

})