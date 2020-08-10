/**
 * burgerElementSelector に指定した要素をクリックした時にその子要素に is-active クラスをトグルする
 *
 * @param {string} burgerElementSelector
 */
export function displayHiddenContentWithClick(burgerElementSelector) {
    const burgerElements = document.querySelectorAll(burgerElementSelector);

    if (burgerElements.length > 0) {

        burgerElements.forEach(el => {
            el.addEventListener('click', () => {
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
}