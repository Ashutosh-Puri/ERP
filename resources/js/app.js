// import './bootstrap';

document.addEventListener('alpine:init',()=>{
    Alpine.data('dropdown',()=>({
        open:false,
        toggle(){
            this.open=!this.open;
        },

    }));

    Alpine.store('currentuser',{
       name:'Ashutosh',
       posts:['post 1','post 2' ,'post 3']

    });
});