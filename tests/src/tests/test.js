import {Selector, t, ClientFunction} from 'testcafe';

fixture (`FirstTest`)

test
    .page`http://localhost/index.php`('My test', async () => {
        await t
            .click();
    await t.wait(5000)
});
