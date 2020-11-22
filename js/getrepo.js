// create a request var & assign a new XMLHttpRequest object to it
var request = new XMLHttpRequest()

// open a new connection, using the Get request on the URL endpoint
request.open('GET', 'https://api.github.com/users/savirafatika/repos', true)

request.onload = function () {
   // Begin accessing JSON data here
   var data = JSON.parse(this.response)
   
   var statusHTML = ''
   
   $.each(data, function (i, status) {
      if (status.language == 'PHP') {
         var dot = '4F5D95'
      } else if (status.language == 'CSS') {
         var dot = '563D7C'
      } else if (status.language == 'JavaScript') {
         var dot = 'F1E05A'
      } else if (status.language == 'HTML') {
         var dot = 'E34C26' 
      }
         
      statusHTML += '<tr>'
      statusHTML += '<td>' + status.name + '</td>'
      statusHTML += '<td><a class="waves-effect waves-light btn-small pink darken-4 white-text" href="'+ status.html_url +'" >Review</a></td>'
      statusHTML += '<td><a class="waves-effect waves-light btn-floating dot" style="width: 15px; height: 15px; margin-right: 5px; margin-top: -4px; background-color: #'+ dot +';"></a>' + status.language + '</td>'
      statusHTML += '</tr>'
   })
   $('tbody').html(statusHTML)
}

// send request
request.send()