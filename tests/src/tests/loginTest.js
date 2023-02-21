import {Selector, t, ClientFunction} from 'testcafe';

fixture.skip(`FirstTest`)
    .page`http://localhost/index.php`

test('My test', async t => {
        const loginButton = Selector("a").withText("Log In/Reg");
        const login = Selector("#InputLogin");
        const password = Selector("#InputPassword");
        const button = Selector("[type='submit']")
        await t
            .click(loginButton)
            .click(login)
            .click()
            .typeText(login, "12345")
            .typeText(password, "1")
        ;
    //await t.wait(5000)
});
