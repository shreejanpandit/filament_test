import { test, expect } from '@playwright/test';

test('My first test', async function ({ page }) {
    await page.goto('http://primo.test/');
    const url = await page.url();
    const title = await page.title();
    console.log('Title:', title);
    // expect(url).toBe('https://www.google.com/');
    // await expect(page).toHaveTitle('Google');
});
