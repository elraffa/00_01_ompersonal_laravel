import React, { useEffect, useState } from 'react'
import sectionsData from './sections.json'


const Section = ({ section }) => (
  <>
    <div className="sm:flex mb-6">
    <h2 className="text-xl font-bold mb-2 px-6 py-2 text-blue-50 bg-blue-600 rounded-md ">{section.title}</h2>
    <p className="text-md font-bold mb-2 px-6 py-2 text-gray-800 rounded-md ">{section.subtitle}</p>
    </div>
    <p className={section.descriptionClass ? section.descriptionClass : 'mb-4 text-lg font-bold'}>{section.description}</p>
    <div className={`mb-4 ${section.class}`}>
      {section.questions.map((question) => (
        <Question key={question.id} question={question} />
      ))}
    </div>
  </>
)

const Question = ({ question }) => (
  <div className="mb-2">
    <p className="mb-2 font-semibold">
      <span className="text-blue-50 bg-blue-400 px-4 py-1 rounded-md">Question {question.id}.</span> {question.question_text}</p>
    {question.choices.map((choice) => (
      <Choice key={choice.id} choice={choice} questionId={question.id} />
    ))}
  </div>
)

const Choice = ({ choice, questionId }) => (
  <div className="mb-2">
    <input
      type="radio"
      name={`question-${questionId}`}
      value={choice.id}
      className="mr-2"
    />
    <label>{choice.choice_text}</label>
  </div>
)

const Exam01 = ({ exam }) => {
  const [currentPage, setCurrentPage] = useState(1)
  const [questionIndex, setQuestionIndex] = useState(0)
  const sectionsPerPage = 2
  const [sections, setSections] = useState([])

  useEffect(() => {
    // Get current sections
    const currentSections = sectionsData.slice((currentPage - 1) * sectionsPerPage, currentPage * sectionsPerPage)

    // Define sections
    let newQuestionIndex = (currentPage - 1) * sectionsPerPage * currentSections[0].numQuestions

    const newSections = currentSections.map((section) => {
      const questionsForSection = exam.questions.slice(newQuestionIndex, newQuestionIndex + section.numQuestions)
      newQuestionIndex += section.numQuestions

      return {
        ...section,
        questions: questionsForSection,
      }
    })

    setQuestionIndex(newQuestionIndex)
    setSections(newSections)
  }, [currentPage]) // Run this hook whenever currentPage changes

  const paginate = (pageNumber) => {
    setCurrentPage(pageNumber)
  }

  const totalSections = Math.ceil(sectionsData.length / sectionsPerPage)


  return (
    <div className="p-6 bg-white rounded max-w-screen-xl m-auto">
      <h1 className="text-2xl font-bold mb-4">{exam.name}</h1>

      {sections.map((section) => (
        <Section key={section.title} section={section} />
      ))}

    <div className="pagination flex">
        {[
          ...Array(totalSections).keys(),
        ].map((number) => (
          <button className="rounded bg-blue-400 text-blue-50 p-4 mx-2 hover:bg-blue-600" key={number} onClick={() => paginate(number + 1)}>
            {number + 1}
          </button>
        ))}
      </div>
    </div>
  )
}

export default Exam01