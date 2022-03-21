function searchMovie() { //Boleh ubah nama function
    $('#movie-list').html('');

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '7f31e438',
            's': $('#search-input').val()
        },
        success: function (result) {
            if (result.Response == "True") {
                let movies = result.Search;

                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
                        <div class="col-md-3">
                            <div class="card mb-3 text-center">
                                <img src="`+ data.Poster + `" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">`+ data.Title + `</h5>
                                <h6 class="card-subtitle mb-2 text-muted">`+ data.Year + `</h6>
                                <a href="#" class="btn btn-primary">Detail</a> <!--Tambahkan link page read / detail-->
                                </div>
                            </div>
                        </div>
                    `);
                });

                $('#search-input').val('');

            } else {
                $('#movie-list').html(`
                <div class="col">
                    <h1 class="text-center">`+ result.Error + `</h1>
                </div>
                `)
            }
        }
    });
}

function showmovie() {

    $.ajax({
        url: 'https://api.themoviedb.org/3/movie/popular',
        type: 'get',
        dataType: 'json',
        data: {
            'api_key': 'ccc2aabf1e29c5edd24f5ee05aa1f1bb',
        },
        success: function (result) {
            let movies = result.results;

            $.each(movies, function (i, data) {
                $('.box-film.gx-4.gx-lg-5.row-cols-2.row-cols-md-3.row-cols-xl-4.justify-content-center').append(
                    '<div class="box-film-info">' +
                    '<input type="hidden" class="id_mv" value="' + data.id + '">' +
                    '<img src=https://image.tmdb.org/t/p/w500/' + data.poster_path + ' class="film">' +
                    '<div class="text-film">' + data.original_title + '</div>' +
                    '<div><img class="rating mb-2" src="/img/rate.svg" alt=""></div>' +
                    '<div><a href="{{ route(update-film, $item->id) }}" class="btn btn-success">Update</a>' +
                    '<a class="btn btn-primary">Read</a>' +
                    '<a class="btn btn-danger">Delete</a>' +
                    '</div>' +
                    '</div>'
                );
            });
        }
    });
}

// function showmovie() {

//     $.ajax({
//         url: 'http://omdbapi.com',
//         type: 'get',
//         dataType: 'json',
//         data: {
//             'apikey': '7f31e438',
//             's' : 'Death Note',
//         },
//         success: function (result) {
//             if (result.Response == "True") {
//                 let movies = result.Search;

//                 $.each(movies, function (i, data) {
//                     $('.box-film.gx-4.gx-lg-5.row-cols-2.row-cols-md-3.row-cols-xl-4.justify-content-center').append(
//                         '<div class="box-film-info">' +
//                             '<img src=' + data.Poster + ' class="film">' +
//                             '<div class="text-film">' + data.Title + '</div>' +
//                             '<div style="justify-content: space-between;">' +
//                                 '<button class="btn btn-success"> Update </button>' +
//                                 '<button class="btn btn-primary"> Read </button>' +
//                                 '<button class="btn btn-danger"> Delete </button>' +
//                             '</div>' +
//                         '</div>'
//                         /*<div class="col-md-4">
//                             <div class="card mb-3 text-center">
//                                 <img src="`+ data.Poster + `" class="card-img-top" alt="...">
//                                 <div class="card-body">
//                                 <h5 class="card-title">`+ data.Title + `</h5>
//                                 <h6 class="card-subtitle mb-2 text-muted">`+ data.Year + `</h6>
//                                 <a href="#" class="btn btn-primary">Detail</a> <!--Tambahkan link page read / detail-->
//                                 </div>
//                             </div>
//                         </div>*/
//                     );
//                 });

//                 $('#search-input').val('');

//             } else {
//                 $('#movie-list').html(`
//                 <div class="col">
//                     <h1 class="text-center">`+ result.Error + `</h1>
//                 </div>
//                 `)
//             }
//         }
//     });
// }

$('#search-button').on('click', function () {
    searchMovie();
});

$('#search-input').on('keyup', function (e) {
    if (e.keyCode === 13) {
        searchMovie();
    }
});

$(document).ready(function () {
    showmovie();
});