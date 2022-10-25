const inputs = document.querySelectorAll(".input");  //membuat variabel inputs yang isinya input username dan password
const show  = document.querySelector('.show-pass')	//membuat variabel show yang isinya icon show password 
const hide = document.querySelector('.hide-pass')	//membuat variabel hide yang isinya icon hide password

// membuat fungsi agar password dapat terlihat
show.addEventListener('click', () => {
	inputs[1].type = 'text'
	show.style.display = 'none'
	hide.style.display = 'inline'
})

// membuat fungsi agar password tidak terlihat
hide.addEventListener('click', () => {
	inputs[1].type = 'password'
	show.style.display = 'inline'
	hide.style.display = 'none'
})

//Membuat fungsi menambahkan class focus pada variabel parent agar nama username/password nya keatas
function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}


//Membuat fungsi menghapus class focus agar ketika di klik selain bagian formulir menghilang effect fungsi addcl
function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

//  Memanggil fungsi masing masing yang sudah di buat di atas
inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
