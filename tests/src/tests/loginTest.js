import {Selector, t, ClientFunction} from 'testcafe';

fixture(`FirstTest`)
    .page`http://localhost/aniallin/authorization.php`

test('login success', async t => {
        const login = Selector("#InputLogin");
        const password = Selector("#InputPassword");
        const button = Selector("[type='submit']")
        await t
            .typeText(login, "arthur")
            .typeText(password, "12345")
            .click(button)
        await t.wait(2000)
});
