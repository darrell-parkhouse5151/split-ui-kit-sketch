class Login {
    init() {
        this.cacheDom();
        this.handleEvents();
    }

    cacheDom() {
        this.body = $("body");
        this.loginForm = $('.login-form');

    }

    handleEvents() {
        let _self = this;

        _self.body.addClass('login');

        _self.loginForm.on('submit', (e) => {
            e.preventDefault();

            $.ajax({
                type: 'post'
            })
        })
    }
}

let login = new Login();
login.init();