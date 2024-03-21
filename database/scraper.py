import requests
from bs4 import BeautifulSoup
import json
import warnings
from urllib3.exceptions import InsecureRequestWarning

warnings.simplefilter('ignore', InsecureRequestWarning)

def scrape_questions(url, session_cookie):
    # Create a session and set the session cookie
    session = requests.Session()
    session.cookies.set('session', session_cookie)

    # Scrape questions
    response = session.get(url)
    soup = BeautifulSoup(response.text, 'html.parser')

    questions = []

    # Select questions and choices
    for question_div in soup.select('h5'):
        question_text = question_div.text.strip()
        print(f'Question: {question_text}')  # Print the question text

        choices = [label.text.strip() for label in question_div.find_next_siblings('label.form-check-label')]
        print(f'Choices: {choices}')  # Print the choices

        questions.append({
            'question': question_text,
            'choices': choices,
            'correctAnswer': ''  # You'll need to figure out how to get the correct answer
        })

    return questions

def main():
    url = 'http://original.ompersonal.com.ar/test/exam-01/exam-principiantes-01.php'  # Replace with the URL of the website you're scraping
    questions = scrape_questions(url, "l2pv0cbdngdo8qbrplmajsa10g")

    with open('questions.json', 'w') as f:
        json.dump(questions, f, indent=4)

if __name__ == '__main__':
    main()