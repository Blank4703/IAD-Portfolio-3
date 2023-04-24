document.addEventListener('DOMContentLoaded', function() {
    let sub = document.getElementsByClassName('popup');
    sub.addEventListener("click", function(){
        let dis = document.getElementsByClassName('hide');
        dis.style.display = 'block';
    	let button = document.getElementsByClassName('popup');
    	button.style.display = 'none';
    	let button1 = document.getElementsByClassName('popless');
    	button1.style.display = 'block';
    });
	
	let less = document.getElementsByClassName('popless');
	less.addEventListener("click", function(){
    	let d = document.getElementsByClassName('hide');
        d.style.display = 'none';
    	let b = document.getElementsByClassName('popup');
    	b.style.display = 'block';
    	let b1 = document.getElementsByClassName('popless');
    	b1.style.display = 'none';
    });
});