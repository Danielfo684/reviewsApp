
export default class ResponseRow {

    constructor(parent, currentPage) {
        this.parent = parent;
        this.currentPage = currentPage;
    }

    add({id, title, author, description }) {
        const div = document.createElement('div');
        div.classList.add('card', 'mb-3');

        const titleElement = document.createElement('span');
        titleElement.classList.add('col');
        // const imageElement = document.createElement('img');
        // imageElement.src = image ? image : '/images/image.png';
        // imageElement.classList.add('card-img-top');

        titleElement.style.fontSize = '1.5em';
        titleElement.style.textAlign = 'center';

        const authorElement = document.createElement('span');
        authorElement.classList.add('col');

        const descriptionElement = document.createElement('span');
        descriptionElement.classList.add('col');

        titleElement.textContent = title;
        authorElement.textContent = author;
        descriptionElement.textContent = description;

        div.append(titleElement, authorElement, descriptionElement);

        const buttonView = document.createElement('a');
        let textNode = document.createTextNode('Read Reviews');
        buttonView.appendChild(textNode);
        buttonView.setAttribute('data-bs-toggle', 'modal');;
        buttonView.setAttribute('data-bs-target', '#viewModal');
        buttonView.classList.add('btn', 'btn-primary', 'col-auto', 'mb-2');
        const icon = document.createElement('i');
        buttonView.dataset.id = id;
        buttonView.dataset.title = title;
        buttonView.dataset.author = author;
        buttonView.dataset.description = description;
        buttonView.dataset.url = "/review/" + id;
        buttonView.dataset.method = "get";

        const buttonSection = document.createElement('div');
        buttonSection.classList.add('d-flex', 'justify-content-between', 'mt-2');


        const buttonRead = document.createElement('button');
        buttonRead.id = 'buttonRead';
        buttonRead.textContent = 'Mark as Read';
        buttonRead.classList.add('btn', 'btn-success', 'col-auto', 'mb-2', 'buttonRead');
        buttonRead.dataset.url = "/read/" + id;
        buttonRead.dataset.id = id;
        buttonRead.style.display = 'none';



        const buttonReview = document.createElement('button');
        buttonReview.textContent = 'Write Review';
        buttonReview.id = 'buttonReview';
        buttonReview.classList.add('btn', 'btn-info', 'col-auto', 'mb-2');
       buttonReview.dataset.url = "/review/" + id;
       buttonReview.dataset.id = id;

        buttonSection.append(buttonRead, buttonReview);
        div.appendChild(buttonSection);
         div.appendChild(buttonView);


        this.parent.appendChild(div);
    }

    addModalViewStructure(modalElement, title, i) {
        const modalTitle = modalElement.querySelector('.modal-title');
        const modalBody = document.getElementById('viewModalBody');
const div = document.createElement('div');
div.classList.add('card', 'mb-3');
        div.id = 'reviewDiv' + i;
        modalTitle.textContent = title + ' Reviews';

        const descriptionElement = document.createElement('p');
        descriptionElement.classList.add('fs-5')
        descriptionElement.id=  'reviewDescription';

        const reviewWriter = document.createElement('span');
        reviewWriter.classList.add('fw-bold', 'fs-5')
          reviewWriter.id =     'reviewWriter';

        const ratingElement = document.createElement('div');
        ratingElement.classList.add('fs-5')
        ratingElement.id= 'reviewRating';

        const dataElement = document.createElement('span');
        dataElement.classList.add('fs-5');
        dataElement.id =  'reviewData';
        div.appendChild(reviewWriter);
        div.appendChild(descriptionElement);
        div.appendChild(ratingElement);
        div.appendChild(dataElement);
        modalBody.appendChild(div);
    }

    #createElementWithClass(tag, className) {
        const element = document.createElement(tag);
        element.classList.add(className);
        return element;
    }


}