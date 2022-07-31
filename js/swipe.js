$('a[href*=#]').click(function(){
    return false;
  });
    
  
  var animationEndEvent = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
  
  var Person = {
    wrap: $('#people'),
    people: [
      {
        name: 'Linda',
        age: 25,
        img: "https://i0.wp.com/pbs.twimg.com/media/DxYg3KbXgAYouse.jpg?resize=960%2C1200&ssl=1"
      },
      {
        name: 'Lisa',
        age: 20,
        img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwlmBu2nQz_P8Yyx7JK90TupfWbFDlP5caxg&usqp=CAU"
      },
      {
        name: 'Sandra',
        age: 18,
        img: "https://www.informationng.com/wp-content/uploads/2018/04/top-10-states-in-nigeria-with-the-most-beautiful-girls-1.jpg"
      },
      {
        name: 'Chloe',
        age: 18,
        img: "https://i.pinimg.com/736x/43/93/93/4393933003940a763b0197aeb1dc742b.jpg"
      },
      {
        name: 'Alexa',
        age: 23,
        img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXY3vh0Kaojn9zy3zpXSfJCyOKBlBJ5B-iiQ&usqp=CAU"
      },
      {
        name: 'Maria',
        age: 21,
        img: "https://qph.cf2.quoracdn.net/main-qimg-bec2644b8a0256641ee2faa1ee6d8f45-lq"
      },
      {
        name: 'Emma',
        age: 24,
        img: "https://i.pinimg.com/originals/ca/f8/c7/caf8c7c4b2dc42fcc3e740158d2b1d50.png"
      },
      {
        name: 'Sara',
        age: 18,
        img: "https://images.unsplash.com/photo-1552954277-0c45bd503b54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YmVhdXRpZnVsJTIwZ2lybHN8ZW58MHx8MHx8&w=1000&q=80"
      },
      {
        name: 'Lara',
        age: 22,
        img: "https://i.pinimg.com/736x/cf/92/8a/cf928abadcaa685d34f4635fe06d0fdc.jpg"
      }
    ],   
    add: function(){
      var random =     this.people[Math.floor(Math.random() * this.people.length)];
      this.wrap.append("<div class='person'><div style='"+" background-image:url(" + random.img + ")"+"' class='" +"uimage"+ "' /><span><strong>" + random.name + "</strong>, " + random.age + "</span></div>");
    }
  }
  
  var App = {
    yesButton: $('.button.yes .trigger'),
    noButton: $('.button.no .trigger'),
    blocked: false,
    like: function(liked){
      var animate = liked ? 'animateYes' : 'animateNo';
      var self = this;
      Person.add();
      if (!this.blocked) {
        this.blocked = true;           
        $('.person').eq(0).addClass(animate).one(animationEndEvent, function() {
          $(this).remove();
          self.blocked = false;
        });
      }
    }
  };
  
  var Phone = {
    wrap: $('#phone'),
    clock: $('.clock'),
    updateClock: function() {
      var date = new Date();
      var hours = date.getHours();
      var min = date.getMinutes();
      hours = (hours < 10 ? "0" : "") + hours;
      min = (min < 10 ? "0" : "") + min;
      var str = hours + ":" + min;
      this.clock.text(str);
    }
  }
  
  App.yesButton.on('mousedown', function() {
    App.like(true);
  });
  
  App.noButton.on('mousedown', function() {
    App.like(false);
  });
  
  $(document).ready(function() {
    Person.people.forEach(function(person){
      new Image().src = person.img; 
    });
    Phone.updateClock();
    setInterval('Phone.updateClock()', 1000);
    
    Person.add();
    Person.add();
    Person.add();
    Person.add();
  });