let href = window.location.href;

console.log(href);

const href_box = href.split("/");

const index = href_box.length - 1;

const path = href_box[index];


const navbar_items = document.querySelector(".navbar-items");

navbar_items_children = navbar_items.children;

for(let i = 0; i < navbar_items_children.length; i++){

	console.log(navbar_items_children[i]);

	anchor_tag = navbar_items_children[i].children;

	link_text = anchor_tag[0].innerText;

	if(link_text == 'Home'){
		//this is home page..
		if(path == "grid.php"){
			navbar_items_children[i].classList.add("active");
		}else{
			navbar_items_children[i].classList.remove("active");
		}
		
		
	}

	if(link_text == 'Products'){
		//this is product page
		if(path == "products.php"){
			navbar_items.children[i].classList.add("active");
		}else{
			navbar_items_children[i].classList.remove("active");
		}
		

	}

	if(link_text == "Services"){
		//this is services page
		if(path == "services.php"){
			navbar_items.children[i].classList.add("active");
		}else{
			navbar_items.children[i].classList.remove	("active");
		}
	}


}




