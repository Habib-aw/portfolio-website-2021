const form = document.getElementById('postblog');
let toggleblog = false;
function previewpost(e){
    let preview = document.getElementById("previewing");
    let clearPost = document.getElementById("clear-post");
    let toggle_blog = document.querySelectorAll(".blog-toggle");
    let inputs = document.querySelectorAll(".blog-inputs");
    let months = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
    ];
    let d = new Date();
    document.getElementById("date").innerHTML=d.getDate()+" "+months[d.getMonth()]+" "+d.getFullYear()+", " + d.getUTCHours()+":"+d.getUTCMinutes()+" UTC";
    document.getElementById("blog-header").innerHTML = inputs[0].value;
    document.getElementById("blog-content").innerHTML=inputs[1].value;
    if(toggleblog===false){
        e.innerHTML="edit";
        preview.style.visibility="visible";
        preview.style.position = "initial";
        clearPost.style.visibility="hidden";
        clearPost.style.position = "absolute";
        for(let i=0;i<toggle_blog.length;i++){
            toggle_blog[i].style.visibility="hidden";
            toggle_blog[i].style.position = "absolute";
        }

    toggleblog = true;
    }else{
        e.innerHTML="preview";
        preview.style.visibility="hidden";
        preview.style.position = "absolute";
        clearPost.style.visibility="visible";
        clearPost.style.position = "initial";

        for(let i=0;i<toggle_blog.length;i++){
        toggle_blog[i].style.visibility="visible";
        toggle_blog[i].style.position = "initial";
        }
        toggleblog = false;
    }
}

function clearBlogInput() {
    if(confirm("Are you sure you want to clear this post?")){
        let inputs = document.querySelectorAll(".blog-inputs");
        for(let i=0;i<inputs.length;i++){
        inputs[i].value="";
        } 
    }
}
form.addEventListener('submit', (e) =>{
let checks = true;
let inputs = document.querySelectorAll(".blog-inputs");

for(let i=0;i<inputs.length;i++){
    if(inputs[i].value==""){
    inputs[i].style.borderColor = "red";
    inputs[i].style.backgroundColor = "#ffcccc";
    inputs[i].placeholder = "Please enter in the missing field";
    checks = false;
    }else{
    inputs[i].style.borderColor = "transparent";
    inputs[i].style.backgroundColor = "white";
    }
}

if(checks==false){
    e.preventDefault();
}
});
