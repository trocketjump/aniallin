import {Selector, t, ClientFunction} from 'testcafe';
import RegistrationPage from '../PageModels/RegistrationPage'

fixture (`Registration test`)
    .page(`http://localhost/registration.php`);

test('Registration success', async t => {
    const success = Selector("p");
    await t
        .typeText(RegistrationPage.username, RegistrationPage.generateTestLogin())
        .typeText(RegistrationPage.birthday, "2022-02-21")
        .typeText(RegistrationPage.email, RegistrationPage.generateTestEmail())
        .typeText(RegistrationPage.repeatPassword, "vovaLoh")
        .typeText(RegistrationPage.password, "vovaLoh")
        .click(RegistrationPage.button)
        .click(RegistrationPage.button);
    await t.expect(success.innerText).eql("Success");
});
