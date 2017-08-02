var userFeed = new Instafeed({
    get: 'user',
    sortBy: 'most-recent',
    limit: '20',
    template: '<a class="animation" href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
    // userId: '5758208867', //david
    // accessToken: '5758208867.1677ed0.62b1bcab24b9466394a9726ae3c88ef3'
    userId: '5782309791', //riton
    accessToken: '5782309791.1677ed0.16f39b6f7eec45568ed495c0129fae0d'


});
userFeed.run();