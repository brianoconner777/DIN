module.exports = function(server) {
  // Install a `/` route that returns server status
  var router = server.loopback.Router();
  router.get('/', function(req, res) {
    res.render('index');
});

  router.get('/session', function(req, res) {
    res.render('session');
});
  server.use(router);
};
