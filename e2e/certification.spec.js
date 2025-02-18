import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://primo.test/admin/login');
  await page.getByRole('textbox', { name: 'Email address*' }).click();
  await page.getByRole('textbox', { name: 'Email address*' }).fill('super-admin@primo.com');
  await page.getByRole('textbox', { name: 'Email address*' }).press('Tab');
  await page.getByRole('textbox', { name: 'Password*' }).fill('password');
  await page.getByRole('main').click();
  await page.getByRole('checkbox', { name: 'Remember me' }).check();
  await page.getByRole('button', { name: 'Sign in' }).click();
  await page.getByRole('link', { name: 'Certifications' }).click();
  await page.getByRole('link', { name: 'New certification' }).click();
  await page.getByRole('textbox', { name: 'Title*' }).click();
  await page.getByRole('textbox', { name: 'Title*' }).fill('Test');
  await page.getByRole('textbox', { name: 'Title*' }).press('Tab');
  await page.getByRole('textbox', { name: 'Description' }).fill('this is test');
  await page.getByRole('button', { name: 'Save' }).click();
  await page.getByRole('row', { name: 'Select/deselect item 32 for' }).getByRole('link').nth(2).click();
  await page.getByRole('textbox', { name: 'Title*' }).click();
  await page.getByRole('textbox', { name: 'Title*' }).fill('Test123');
  await page.getByRole('textbox', { name: 'Description' }).click();
  await page.getByRole('textbox', { name: 'Description' }).fill('this is test edit');
  await page.getByRole('button', { name: 'Save changes' }).click();
  await page.getByRole('row', { name: 'Select/deselect item 32 for' }).getByRole('link').nth(2).click();
  await page.getByRole('button', { name: 'Delete' }).click();
  await page.getByRole('button', { name: 'Confirm' }).click();
});