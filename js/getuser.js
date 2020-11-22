var user = new XMLHttpRequest()

user.open('GET', 'https://api.github.com/users/savirafatika', true)

user.onload = function () {
   // Begin accessing JSON data here
   var usr = JSON.parse(this.response)
   
   var con = ''

      con += '<h5>Connect me: '+ usr.name +'</h5>'
      con += '<a style="margin-right: 5px;" class="waves-effect waves-light btn-small pink darken-4 white-text" href="'+ usr.html_url +'">visit</a>'
      con += '<a class="waves-effect waves-light btn-small pink darken-4 white-text" href="">Followers: '+ usr.followers +'</a>'

   $('#connect').html(con)
}

user.send()