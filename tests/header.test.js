import { test, expect } from '@playwright/test';

test('Header height should be consistent on scroll', async ({ page }) => {
  // Wait for the local WordPress instance to be ready
  await page.goto('http://localhost:8000');

  const header = page.locator('#masthead');
  
  // Measure Initial Height
  const initialBox = await header.boundingBox();
  const initialHeight = initialBox.height;
  console.log(`Initial Header Height: ${initialHeight}px`);

  // Scroll Down
  await page.evaluate(() => window.scrollTo(0, 500));
  await page.waitForTimeout(500); // Wait for transition

  // Measure Height After Scroll
  const scrolledBox = await header.boundingBox();
  const scrolledHeight = scrolledBox.height;
  console.log(`Scrolled Header Height: ${scrolledHeight}px`);

  // Heights should be equal (within 1px to allow for rendering rounding)
  expect(Math.abs(scrolledHeight - initialHeight)).toBeLessThanOrEqual(1);
});
