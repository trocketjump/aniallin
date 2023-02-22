import {Selector, t, ClientFunction} from 'testcafe';
import RegistrationPage from '../PageModels/RegistrationPage'

fixture.skip (`Registration test`)
    .page(`http://localhost/aniallin/registration.php`);

test('Registration success', async t => {
    const success = Selector("p");
    await t
        .typeText(RegistrationPage.username, RegistrationPage.generateTestLogin())
        .typeText(RegistrationPage.birthday, "2022-02-21")
        .typeText(RegistrationPage.email, RegistrationPage.generateTestEmail())
        .typeText(RegistrationPage.repeatPassword, "12345")
        .typeText(RegistrationPage.password, "12345")
        .click(RegistrationPage.button)
    await t.wait(2000)
});
