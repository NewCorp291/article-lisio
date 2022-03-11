let b = document.body;
let lazy = document.getElementById('lazy');
let dc = document.getElementById('dc');
let mve = document.getElementById('mve');
let op = document.getElementById('op');
let blogs = document.querySelectorAll(".nav-blog button");
let accessibilities = document.querySelectorAll(".accessibility");
let environments = document.querySelectorAll(".environment");
let all = document.querySelectorAll(".item_wrap");

blogs.forEach((blog)=>{
    blog.addEventListener("click", ()=> {
        blogs.forEach((blog)=>{
            blog.classList.remove("active");
        })
        
        blog.classList.add("active");

        var naval = blog.getAttribute("data-tabs");

        all.forEach((item)=>{
            item.style.display = "none";
        })
        
        if(naval == "environment"){
            environments.forEach((environment)=>{
                environment.style.display = "block";
            })
            dc.remove();
            lazy.insertAdjacentElement('afterend', mve); 
        }

        else if(naval == "accessibility"){
            accessibilities.forEach((accessibility)=>{
                accessibility.style.display = "block";
            })
        }
        
        else{
            all.forEach((item)=>{
                item.style.display = "block";
            })
            location.reload(dc);
        }
    })
    
})





