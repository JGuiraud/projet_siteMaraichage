var userFeed = new Instafeed({
    get: 'user',
    sortBy: 'most-recent',
    limit: '20',
    template: '<a class="animation" href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
    userId: '5758208867', //david
    // userId: '5782309791', //riton
    accessToken: '5758208867.1677ed0.62b1bcab24b9466394a9726ae3c88ef3'
});
userFeed.run();