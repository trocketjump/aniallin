import {Selector, t, ClientFunction} from 'testcafe';

class RegistrationPage{
    constructor(){
        this.url = "http://localhost/registration.php";
        this.username = Selector("#InputName");
        this.birthday = Selector("#InputBirthday");
        this.email = Selector("#InputEmail");
        this.repeatPassword = Selector("#RepeatPassword");
        this.password = Selector("#InputPassword");
        this.button = Selector("[type='submit']");
    }
    generateTestLogin = () => {
        let login = 'test';
        const date = new Date().getTime();
        return (login + date).substring(0, 16);
    };

    generateTestEmail = () => {
        let email = 'test';
        const date = new Date().getTime();
        return email + date + "@test.ua";
    }

}
export default new RegistrationPage();