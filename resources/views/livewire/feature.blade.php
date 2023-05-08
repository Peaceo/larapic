<div x-data="{ open: false, text: '', content: $wire.content,
firstPage() {
    this.text = ''
    this.open = false; 
    $dispatch('notify', { open: this.open })
},
 secondPage() {
     this.text = this.getText($wire.encodedText);
     this.open = true;
     $dispatch('notify', { open: this.open }) 
 },
 getText(crypt) {
    return atob(crypt)
 }
}">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=AlexBrush&display=swap');
      @import url('https://fonts.googleapis.com/css?family=Parisienne&display=swap');
   
      #edhfyewe {
         font-family: 'Parisienne', cursive;
         font-size: 72px;
         font-weight: bold;
         color: #c62828;
         text-align: center;
         text-shadow: 2px 2px 4px #000000;
      }

      .main > h1  {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -90%);
      }

      .main > img  {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 80%);
      }

      .container {
        margin: 150px;
        font-family: 'AlexBrush', cursive;
        font-size: 18px;
        font-weight: 550
      }

      .back {
        cursor: pointer;
      }

      [x-cloak] { display: none !important; }
    </style>

    <div class="main">
        <p class="container" x-show="!open" x-cloak>
            <template x-for="(text, index) in content" :key="index">
               <p x-text="getText(text)"></p>
            </template>
            <span ><a href="#" @click.prevent="secondPage()" title="Read more" style="font-weight:bolder; color: green">Read more...</a></span>
        </p>
        
        <h1 x-show="open" id="edhfyewe" x-text="text" ></h1>
        <img x-show="open" class="back" x-on:click="firstPage()" src={{asset('763476_icon.png')}} alt="Back">
    </div>
</div>
