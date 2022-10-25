const inputs = document.querySelectorAll(".input");  // 
const show  = document.querySelector('.show-pass')
const hide = document.querySelector('.hide-pass')

// membuat passwor dapat terlihat
show.addEventListener('click', () => {
	inputs[1].type = 'text'
	show.style.display = 'none'
	hide.style.display = 'inline'
})

hide.addEventListener('click', () => {
	inputs[1].type = 'password'
	show.style.display = 'inline'
	hide.style.display = 'none'
})

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
