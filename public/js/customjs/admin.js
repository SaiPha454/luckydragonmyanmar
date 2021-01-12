
// on select image for comment
function onSelectImg(event){
    console.log(event);
    document.getElementById('review-img').src= URL.createObjectURL(event.target.files[0]) ;
}

// onselect image for product
function onSelectProductImage(event){
    console.log(event);
    document.getElementById('product-preview-div').style.display='inline-block';
    document.getElementById('product-preview-img').src= URL.createObjectURL(event.target.files[0]) ;
}


