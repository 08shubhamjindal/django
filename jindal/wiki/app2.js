function main(){
  search();
}

function search(){
  $('#field').keypress(function(e){
    if(e.which === 13){
      e.preventDefault();
      // console.log('ENTER Press - Value: ', e.target.value);
      $('#rand').css({'display':'none'});
      var term = e.target.value;
      wikiQuery(term);
      $('#field').val('');
    }
  });
}

function wikiQuery(term){
  var api = 'https://en.wikipedia.org/w/api.php?action=query&format=json&prop=extracts&generator=search&exsentences=1&exlimit=10&exintro=1&explaintext=1&gsrsearch=';
  $.ajax({
    url: api + term,
    method: 'GET',
    // data: {},
    dataType: 'jsonp',
    success: function(res){
      if(res.query === undefined){
        displayResults(term, 'no results');
        $('#results').html('');
        return;
      }
      //console.log('Response: ', res.query.pages);
      $('#results').html('');
      displayResults(term, res.query.pages);
    },
    error: function(err){
      console.log('Error: ', err);
    }
  });
}

function displayResults(term, results){
  if(results === 'no results'){
    $('#term').text('No Results for "' + term + '"');
    return;
  }
  $('#term').text('Results for "' + term + '"');
  _.each(results, function(result){
    $('#results').append('<a class="wikiLink" href="https://en.wikipedia.org/?curid=' + result.pageid + '" target="_blank"><div class="result"><div class="title">' + result.title + '</div><div class="extract">' + result.extract + '</div></div></a>');
  });
}

$(document).ready(main());

// Order results by index
// get article photo to display
// style results
// result list display animation