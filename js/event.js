var count=0;var count1=0;var count2=0;var count3=0;var count4=0;var count5=0;
var toast=new Vue({
  el: '#toast',
  data: {
    show: false,
    toast: "fdaf",
    level:"Z"
  },
  methods: {
    openToast: function (argument,arg) {    
      var t=this;
      t.show=true;
      t.toast=argument;
      console.log(this.show)
      setTimeout(function(){t.show=false;},arg)
    }    
  }
})
var toast1=new Vue({
  el: '#toast1',
  data: {
    show: false,
    toast: "fdaf",
    level:"Z"
  },
  methods: {
    openToast: function (argument,arg) {    
      var t=this;
      t.show=true;
      t.toast=argument;
      console.log(this.show)
      setTimeout(function(){t.show=false;},arg)
    }    
  }
})
var banner=new Vue({
  el:"#banner",
  data: {
    army:"0",
    dragon:"0",
    dr:"dragon",
    ar:"army",
    life:"0"
  },
  methods:{
    checkarmy:function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getarmy.php",
        success:function(data){
          console.log(data);
          s.army=data;
        }
      })

    },
    checkdragon:function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getdragon.php",
        success:function(data){
          console.log(data);
          s.dragon=data;
        }
      })

    },
    checklifeline:function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getlifeline.php",
        success:function(data){
          console.log(data);
          s.life=data;
        }
      })
    },
    checklevel:function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/checklevel.php",
        success:function(data){
          console.log(data);
          s.level=data;
          if(s.level==="E"){
            s.life="2";
            section.calltimefunction();
          }

        }
      })
      return s.level;
    }

  
  
}

})
var section=new Vue({
  el:"#section",
  data:{
    sh:false,
    level:"Z",
    show1:true,
    show2:true,
    show3:true,
    show4:true,
    show5:true,
    show6:true,       
  },
  methods: {
    checkSession: function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/checksession.php",
        success: function(data){
          console.log(data);
          if(data=="success"){
            s.sh=true;
            toast.openToast('Welcome to the quest',3000);                     
          }
          else{
            s.sh=false;
            toast.openToast('Login please',3000);           
          }
        }
      });
    },
    checklevel:function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/checklevel.php",
        success:function(data){
          console.log(data);
          s.level=data;

        }
      })
    },
    checkclue:function(argument){
        var clue="clue"+argument;var response=$('#cans1').val();var ans;
        modals.checkclue(argument);

    },
    checkscene0:function(){
      var response=$('#sans0').val();var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getscene0.php",
        data: {response:response},
        success:function(data){
          console.log(data);
          if(JSON.parse(data)=="success"){
            toast.openToast('Your answer is correct',3000);
            setTimeout(function(){s.checklevel();},4500);banner.checkarmy();banner.checkdragon();modals.lifeline();modals.raisearmy(200);
            toast1.openToast("The hungry dragons severely injures her husband and he succumbs to his injuries and dies.Now, the princess has full control of her husband's army. (+200 Troops, +3 Dragons) ",6000);
          }
          
          else{
             toast.openToast('Your answer is incorrect',3000);
          }
          
        }
    })
    },
    checkscene1:function(){
      var response=$('#sans1').val();var s=this;console.log(response);
      $.ajax({
        type:"POST",
        url:"../php/getscene1.php",
        data: {response:response},
        success:function(data){
          console.log(data);
          if(JSON.parse(data)=="success"){
            toast.openToast('Your answer is correct',3000);modals.raisearmy(20);
            setTimeout(function(){s.checklevel();},4500);banner.checkarmy();banner.checkdragon();modals.lifeline();
            toast1.openToast("The huge door creaks open slowly and the princess can see a dimly lit foyer. ",6000);
          }
          else{
             toast.openToast('Your answer is incorrect',3000);
          }
          
        }
    })
    },
    checkscene2:function(){
      var response=$('#sans2').val();var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getscene2.php",
        data:{response:response},
        success:function(data){
          console.log(data);
          if(JSON.parse(data)=="success"){
            toast.openToast('Your answer is correct',3000);modals.raisearmy(20);
           setTimeout(function(){s.checklevel();},4500);banner.checkarmy();banner.checkdragon();modals.lifeline();toast1.openToast("The witch extends her wrinkly arms out the door and swiftly snatches the necklace from the princess.",6000);

          }
          else{
             toast.openToast('Your answer is incorrect',3000);
          }
          
        }
    })
    },
  

  checkscene3:function(){
      var response=$('#sans3').val();var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getscene3.php",
        data:{response:response},
        success:function(data){
          console.log(data);
          if(JSON.parse(data)=="success"){
            toast.openToast('Your answer is correct',3000);
           setTimeout(function(){s.checklevel();},4500);banner.checkarmy();banner.checkdragon();modals.lifeline();modals.raisearmy(150);
           $('#sans3').val('');toast1.openToast("The witch powders the dragonglass and chants something in a mysterious tongue and flings it across the hallway. A throng of shadow-like figures took form from the powder.The witch said that these shadows will aid her during the battle. (+150 Troops)",6000);

          }
          else{
             toast.openToast('Your answer is incorrect',3000);
          }
          
        }

    })
    },
    checkscene4:function(){
      var response=$('#sans4').val();var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getscene4.php",
        data:{response:response},
        success:function(data){
          console.log(data);
          if(JSON.parse(data)=="success"){
            toast.openToast('Your answer is correct',3000);
           setTimeout(function(){s.checklevel();},4500);banner.checkarmy();banner.checkdragon();modals.lifeline();$('#sans5').val('');$('#sans4').val('');
           toast1.openToast("The queen of thorns agrees to help and provides some of her men and enough ships for her army to sail across the ocean. (+50 Troops)",6000);
           modals.raisearmy(50);banner.life="2";banner.life="2";setTimeout(function(){s.calltimefunction();},3000);

          }
          else{
             toast.openToast('Your answer is incorrect',3000);
          }
          
        }

    })
    },
    checkscene5:function(){
      var response=$('#sans5').val();var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getscene6.php",
        data:{response:response},
        success:function(data){
          console.log(data);
          if(JSON.parse(data)=="success"){
            toast.openToast('Your answer is correct',3000);
           s.checklevel();banner.checkarmy();banner.checkdragon();modals.lifeline();
           toast1.openToast("The huge door creaks open slowly and the princess can see a dimly lit foyer. ",6000);
           setTimeout(function(){window.location="../php/leader.php"},8000);
           
          }
          else{
             toast.openToast('Your answer is incorrect',3000);
          }
          
        }

    })
  },
    calltimefunction: function(){
      var s=this;var army="";$('#sans5').val('a');
      $.ajax({
        type:"POST",
        url:"../php/getarmy.php",
        success:function(data){
          console.log(data);
          army=data;
           for(var i=army/5;i>=0;i--){
console.log(i);
             setTimeout(function(){s.reducearmy(5);console.log(i);    
                },5000+(5000*i));
           }
        }
      })
              
        
        
    

      
      //s.calltimefunction();

    },
   
    reducearmy:function(argument){
      var s=this;

      $.ajax({
        type:"POST",
        url:"../php/reducearmy.php",
        data:{
          count:argument       },
          success:function(data){
            console.log(data);
            banner.checkarmy();
            if(data=="error"){
              toast1.openToast("You failed to breach the wall...!!!",5000);
              setTimeout(function(){window.location="../php/leader.php"},5000);
            }

          }
      })
    }
}

})
section.checkSession();
section.checklevel();
banner.checklifeline();
var modals=new Vue({
  el:"#modals",
  data:{
    heading1:"",
    letter1:".",
    heading2:"",
    letter2:"",
    heading3:"",
    letter3:"",
    heading4:"",
    letter4:"",
    heading5:"",
    letter5:"",
    heading6:"",
    letter6:"",
    heading7:"",
    letter7:"",
    heading8:"",
    letter8:"",
    lifelinedesc:"",level:""
  },
  methods:{
    
    checkclue:function(argument){
        var clue="clue"+argument;var ans=[];var s=this;
        console.log(clue);
        $.ajax({
          type:"POST",
          url:"../php/getclue.php",
          success:function(data){
            console.log(data);
             ans=JSON.parse(data);
              switch(argument){
          case "one":console.log(ans);var response=$('#cans1').val();if(count==0){
            if(ans['0']==response){toast.openToast('Your answer is correct',3000);s.raisearmy(10);count++;
            setTimeout(function(){$('#modal1').modal('close');},3000);}
                      else{toast.openToast('Your answer is incorrect',3000);}
                    }else{toast.openToast("You've already solved this",3000)}break;
          case "two":console.log(ans);var response=$('#cans2').val();if(count1==0){if(ans['1']==response){toast.openToast('Your answer is correct',3000);s.raisearmy(10);count1++;setTimeout(function(){$('#modal2').modal('close');},3000);}
                      else{toast.openToast('Your answer is incorrect',3000);}}else{toast.openToast("You've already solved this",3000)}break;
          case "three":console.log(ans);var response=$('#cans3').val();if(count2==0){if(ans['2']==response){toast.openToast('Your answer is correct',3000);s.raisearmy(10);count2++;setTimeout(function(){$('#modal3').modal('close');},3000);}
                      else{toast.openToast('Your answer is incorrect',3000);}}else{toast.openToast("You've already solved this",3000)}break;
          case "four":console.log(ans);var response=$('#cans4').val();if(count3==0){if(ans['3']==response){toast.openToast('Your answer is correct',3000);s.raisearmy(10);count3++;setTimeout(function(){$('#modal4').modal('close');},3000);}
                      else{toast.openToast('Your answer is incorrect',3000);}}else{toast.openToast("You've already solved this",3000)}break;
          case "five":console.log(ans);var response=$('#cans5').val();if(count4==0){if(ans['4']==response){toast.openToast('Your answer is correct',3000);s.raisearmy(10);count4++;setTimeout(function(){$('#modal5').modal('close');},3000);}
                      else{toast.openToast('Your answer is incorrect',3000);}}else{toast.openToast("You've already solved this",3000)}break;
          case "six":console.log(ans);var response=$('#cans6').val();if(count5==0){if(ans['5']==response){toast.openToast('Your answer is correct',3000);s.raisearmy(10);count5++;setTimeout(function(){$('#modal6').modal('close');},3000);}
                      else{toast.openToast('Your answer is incorrect',3000);}}else{toast.openToast("You've already solved this",3000)}break;
          case "seven":console.log(ans);var response=$('#cans7').val();if(count==0){if(ans['1']==response){toast.openToast('Your answer is correct',3000);s.raisearmy(10);count1++;setTimeout(function(){$('#modal6').modal('close');},3000);}
                      else{toast.openToast('Your answer is incorrect',3000);}}else{toast.openToast("You've already solved this",3000)}break;
          case "eight":console.log(ans);var response=$('#cans8').val();if(ans['7']==response){toast.openToast('Your answer is correct',3000);$('#modal8').modal('close')}
                      else{toast.openToast('Your answer is incorrect',3000);}break;            
        }
          }
        });
        

    },
    checkhack:function(){
      var s=this;
      var response=$('#cans66').val();
      $.ajax({
        type:"POST",
        url:"../php/checkscene6.php",
        data:{
          response:response
        },
        success:function(argument){
          console.log(argument);
          if(argument=="true"){
            toast.openToast("Fire and Blood",5000);$('#modal66').modal('close');
          }
          else{
            toast.openToast("Try again",5000);
          }
        }
      })

    },
    raisearmy:function(argument){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/raisearmy.php",
        data:{
          count:argument       },
          success:function(data){
            console.log(data);
            banner.checkarmy();

          }
      })
    },
    lifeline:function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/getlifedesc.php",
        
        success:function(data){
          console.log(data);
            s.lifelinedesc=data;
          }
        });

    },
    uselife:function(){
      var s=this;
      $.ajax({
        type:"POST",
        url:"../php/checklevel.php",
        success:function(data){
          console.log(data);
          s.level=data;
          console.log(s.level+"fsads");
          s.uselife2(s.level);
        }
      });
      
      
    },
    uselife2:function(argument){
      var s=this;var k=argument;console.log(argument+"dba");
      $.ajax({
        type:"POST",
        url:"../php/uselife.php",
        
        success:function(data){
          console.log(data);
            //s.lifelinedesc=data;

            banner.checkarmy();
            banner.checklifeline();
            banner.checkdragon();
            //section.checklevel();
            setTimeout(function(){s.lifeline()},3000);
            toast.openToast("You used the life line successfully",3000);
            $('#modallife').modal('close');
            if(k==="D"){
              banner.checklevel();
            }

            if(k==="B"){
              console.log("igbhsighb");
              $("#scene2").css("background-color", "red");
              //$('#scene2').addClass('.red');
              setTimeout(function(){section.checklevel();},5000);
            }
            setTimeout(function(){section.checklevel();},2000);
          }
        });
    }
    

  }

})
section.checkSession();
section.checklevel();
banner.checkarmy();
//toast1.openToast("hiuihbi",3000);
var m=modals.lifeline();
banner.checkdragon();



