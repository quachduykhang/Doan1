class Login {
   constructor(form,fields) {
        this.form =form;
        this.fields =fields;
        this.validateonSubmit();

    }
 validateonSubmit(){
    let seft = this;

    this.form.addEventListener("submit",(e) => {
        e.preventDefault();
        var error = 0;
        self.fields.forEach((field)=> {
            const input = document.querySelector(`#${field}`);
            if(self.validatFields(input)==
            false){
                error++;
            }
        });
        if (error == 0){
          var data ={
            Email: document.querySelector('#Email').value,
            Matkhau: document.querySelector('#Matkhau').value,
          };
          fetch("",  {
            method: "POST",
            body: JSON.stringify(data),
            header:  {
                "Content-Type": "application/json; charset=UTF-8",
            },
          })
           .then((Response)=>Response.json())
           .then((data) => {
             if(data.error){
                console.error("Error:" ,data.message);
                document.querySelector(".error-message-all")
                .style.display =""
             }



            console.log(data);
           })
                 .catch(data) => {
                    console.error("Error:", data.message)
                 }
           /* localStorage.setItem("auth",1);
            this.form.submit();
            */
        }
    });
 }
}
